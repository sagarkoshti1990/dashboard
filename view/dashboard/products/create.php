
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Products Create</h1>
</div>

<div class="card py-5 px-4">
    <form action="<?=$url?>/dashboard/products" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputTitle">Title</label>
            <input type="text" name="title" class="form-control" id="exampleInputTitle" placeholder="Enter Title">
        </div>
        <div class="mb-3">
            <label for="exampleInputImage">Image</label>
            <input type="file" name="image" class="form-control" id="exampleInputImage" placeholder="Enter Image">
        </div>
        <div class="mb-3">
            <label for="exampleInputcontentHierarchy">Content Hierarchy</label>
            <input type="text" name="content_hierarchy" class="form-control" id="exampleInputcontentHierarchy" placeholder="Enter Content Hierarchy">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>