                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
					<form action="" method="post">
						<input type="hidden" name="id" value="<?= $userMhs['id']; ?>">
	                    <div class="form-group">
						    <label for="name">Name</label>
						    <input type="text" name="name" class="form-control" id="name" value="<?=$userMhs['name']; ?>">
						    <?= form_error('name','<small class="text-danger ml-3">', '</small>'); ?>
						</div>
						<div class="form-group">
						    <label for="email">Email</label>
						    <input type="text" name="email" class="form-control" id="email" value="<?=$userMhs['email']; ?>">
						    <?= form_error('email','<small class="text-danger ml-3">', '</small>'); ?>
						</div>
						<div class="form-group row">
						    <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                <?= form_error('password1','<small class="text-danger ml-3">', '</small>'); ?>
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                                <?= form_error('password2','<small class="text-danger ml-3">', '</small>'); ?>
                            </div>
						</div>
						<button type="submit" name="tambah" class="btn btn-primary float-right mt-3">Change</button>   
					</form>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->