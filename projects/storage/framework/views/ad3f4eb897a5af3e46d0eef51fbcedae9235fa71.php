<?php $__env->startSection('title', 'Admin'); ?>
<?php
    $name = 'News Post';
    $route = 'news-post';
?>
<?php $__env->startSection('content_header'); ?>
    <h1 class="m-0 text-dark"><?php echo e($name); ?> Management</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('content'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <?php
                        $addbar = [
                            'name' => $name,
                            'add-data' => true,
                            'add-name' => 'Add ' . Str::singular($name),
                            'add-anchor' => route($route . '.create'),
                        ];
                    ?>
                    <?php echo $__env->make('admin.common.add-bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-12">

                <div class="card  ">
                    <div class="card-header">
                        <h3 class="card-title"><?php echo e($name); ?> Listing</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="maximize"><i
                                    class="fas fa-expand"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="data-table-gaurav" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Breaking News</th>
                                    <th>Trending News</th>
                                    <th>Top Stories</th>
                                    <th>Banner</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $sno=1;?>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>

                                        <td><?php echo e($sno++); ?></td>
                                        <td>
                                            <?php echo e($client->name); ?>

                                        </td>
                                        <td>
                                            
                                            <?php echo e($client->parentname->title ?? 'N/A'); ?>

                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" 
                                                    type="checkbox" 
                                                    name="breaking_news"
                                                    data-id="<?php echo e($client->id); ?>"
                                                    onclick="handleClick(this)"
                                                    <?php echo e($client->breaking_news == 'yes' ? 'checked' : ''); ?>

                                                >
                                            </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                              <input class="form-check-input" 
                                                  type="checkbox" 
                                                  name="trending_news"
                                                  data-id="<?php echo e($client->id); ?>"
                                                  onclick="handleClick(this)"
                                                  <?php echo e($client->trending_news == 'yes' ? 'checked' : ''); ?>

                                              >
                                          </div>
                                      </td>
                                        <td>
                                          <div class="form-check">
                                              <input class="form-check-input" 
                                                  type="checkbox" 
                                                  name="top_stories_news"
                                                  data-id="<?php echo e($client->id); ?>"
                                                  onclick="handleClick(this)"
                                                  <?php echo e($client->top_stories_news == 'yes' ? 'checked' : ''); ?>

                                              >
                                          </div>
                                      </td>
                                        <td>
                                            <?php if($client->bannerImage): ?>
                                                <img src="<?php echo e(asset($client->bannerImage)); ?>" width="100">
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <a href="<?php echo route($route . '.edit', [$client->id]); ?>"
                                                class="btn btn-outline-success btn-sm raw-margin-right-8"><i
                                                    class="fa fa-pencil-alt"></i> </a>
                                            <form method="post" action="<?php echo route($route . '.destroy', [$client->id]); ?>"
                                                style="display: inline-block;">
                                                <?php echo csrf_field(); ?>

                                                <?php echo method_field('DELETE'); ?>

                                                <button type="submit"
                                                    class="btn btn-outline-danger btn-sm raw-margin-right-8"
                                                    onclick="return confirm('Are you sure you want to delete this <?php echo e($name); ?>?')"><i
                                                        class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('js'); ?>
    <script>
        function handleClick(e) {
            const isChecked = e.checked;
            const name = e.name;
            const id = e.getAttribute('data-id');
            const value = isChecked ? 'yes' : 'no';
            const updateNewsTypeUrl = "<?php echo e(route('update-news-type')); ?>";

            fetch(updateNewsTypeUrl, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        id: id,
                        value: value,
                        type: name,
                    })
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Server response:', data);
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }


        $("#data-table-gaurav").DataTable({
            "lengthMenu": [
                [50, -1],
                [50, "All"]
            ],
            dom: "<'row'<'col-sm-3'l><'col-sm-3'f><'col-sm-6'p>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-5'i><'col-sm-7'p>>",
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Xampp8.2\htdocs\laravel\majlix-news\projects\resources\views/admin/news-post/index.blade.php ENDPATH**/ ?>