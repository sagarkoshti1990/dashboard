<?php
namespace Model;

class DB
{
    public $bd,$query,$table;
    function __construct()
    {
        $servername = "db";
        $username = "root";
        $password = "root123";
        $database_name = "pooja";

        try {
            $conn = new \PDO("mysql:host=$servername;dbname=$database_name", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            $this->db = $conn;
        } catch(\PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function select($select)
    {
        $this->query = "SELECT $select FROM $this->table ";
        return $this;
    }

    public function tableObj($table)
    {
        $this->table = $table;
        return $this;
    }

    public static function table($table)
    {
        return (new Self)->tableObj($table);
    }

    public function where($where)
    {
        foreach($where as $key => $obj) {
            foreach($obj as $attr => $subObj) {
                if($key == 0) {
                    $this->query = $this->query."WHERE $attr=$subObj ";
                } else {
                    $this->query .= "AND $attr=$subObj ";
                }
            }
        }
        return $this;
    }

    public function limit($limit)
    {
        $this->query .= "LIMIT $limit ";
        return $this;
    }

    public function pagination($no_of_records_per_page)
    {
        if (isset($_GET['page'])) {
            $pageno = $_GET['page'];
        } else {
            $pageno = 1;
        }
        $offset = ($pageno-1) * $no_of_records_per_page;
        $total_rows = $this->get("SELECT COUNT(*) as count FROM $this->table");
        if(isset($total_rows,$total_rows[0],$total_rows[0]['count'])) {
            $total_pages = ceil($total_rows[0]['count'] / $no_of_records_per_page);
        } else {
            $total_pages = 0;
        }
        $this->query .= "LIMIT $offset, $no_of_records_per_page";
        
        return [
            "data" => $this->get(),
            "total_pages" => $total_pages,
            "current_page" => $pageno,
            "next_page" => $total_pages > $pageno ? $pageno+1 : null, 
            "preview_page" => $total_pages > $pageno-1 ? $pageno-1 : null, 
        ];
    }

    public function get($query = null)
    {
        if($query) {
            $sth = $this->db->prepare($query);
        } else {
            $sth = $this->db->prepare($this->query);
        }
        $sth->execute();
        return $sth->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function first()
    {   
        $sth = $this->db->prepare($this->query);
        $sth->execute();
        return $sth->fetch(\PDO::FETCH_ASSOC);
    }
}

?>