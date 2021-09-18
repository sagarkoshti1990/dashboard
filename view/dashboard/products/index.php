
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Products</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a href="<?=$url?>/dashboard/products/create" class="btn btn-sm btn-outline-secondary">Add</a>
    </div>
</div>
<div class="table-responsive">
<table class="table table-striped table-sm">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col" style="width:100px">image</th>
        <th scope="col">Content hierarchy</th>
        <th scope="col">Description</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($item['data'] as $key=>$galary): ?>
        <tr>
            <td><?=$galary['id']?></td>
            <td><?=$galary['title']?></td>
            <td><img src="<?= $url.'/'.$galary['image_url']; ?>" class="card-img-top" alt="..."></td>
            <td><?= $galary['content_hierarchy']; ?></td>
            <td><?= $galary['description']; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>