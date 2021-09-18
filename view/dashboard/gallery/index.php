
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Gallery</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <a href="<?=$url?>/dashboard/gallery/create" class="btn btn-sm btn-outline-secondary">Add</a>
        </div>
    </div>
</div>
<div class="table-responsive">
<table class="table table-striped table-sm">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col" style="width:100px">image</th>
        <th scope="col">Content hierarchy</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($item['data'] as $key=>$product): ?>
        <tr>
            <td><?=$product['id']?></td>
            <td><img src="<?= $url.'/'.$product['image_url']; ?>" class="card-img-top" alt="..."></td>
            <td><?= $product['content_hierarchy']; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>