<?php if($item["total_pages"] > 0): ?>
<div class="row">
    <div class="col-12">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
            <li class="page-item <?php if($item["current_page"] == 1){ echo 'disabled'; } ?>"><a class="page-link" href="?page=1">First</a></li>
                <li class="page-item <?php if($item["current_page"] <= 1){ echo 'disabled'; } ?>">
                    <a class="page-link" href="<?php if($item["current_page"] <= 1){ echo '#'; } else { echo "?page=".($item["current_page"] - 1); } ?>">Prev</a>
                </li>
                <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#"><?=$item["current_page"];?></a>
                </li>
                <li class="page-item <?php if($item["current_page"] >= $item["total_pages"]){ echo 'disabled'; } ?>">
                    <a class="page-link" href="<?php if($item["current_page"] >= $item["total_pages"]){ echo '#'; } else { echo "?page=".($item["current_page"] + 1); } ?>">Next</a>
                </li>
                <li class="page-item <?php if($item["current_page"] == $item["total_pages"]){ echo 'disabled'; } ?>"><a class="page-link" href="?page=<?php echo $item["total_pages"]; ?>">Last</a></li>
            </ul>
        </nav>
    </div>
</div>
<?php endif ?>