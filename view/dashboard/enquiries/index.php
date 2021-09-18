
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Products</h1>
</div>
<div class="table-responsive">
<table class="table table-striped table-sm">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone Number</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($item['data'] as $key=>$product): ?>
        <tr>
            <td><?=$product['id']?></td>
            <td><?=$product['name']?></td>
            <td><?=$product['email']?></td>
            <td><?=$product['phone_number']?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>