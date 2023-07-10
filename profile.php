<div class="modal fade" id="userViewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">User Profile</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="addForm" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark"><i class="fas fa-user-alt text-light"></i></span>
                            </div>
                            &nbsp;
                            <input type="text" class="form-control" placeholder="Enter your username" autocomplete="off" required="required" id="username" name="username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Email:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark"><i class="fas fa-envelope-open text-light"></i></span>
                            </div>
                            &nbsp;
                            <input type="email" class="form-control" placeholder="Enter your email" autocomplete="off" required="required" id="email" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Mobile:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark"><i class="fas fa-phone text-light"></i></span>
                            </div>
                            &nbsp;
                            <input type="text" class="form-control" placeholder="Enter your mobile" autocomplete="off" required="required" id="mobile" name="mobile" maxlength="10" minlength="10">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Photo:</label>
                        <div class="input-group">
                            <label class="custom-file-label" for="userPhoto"></label>
                            <input type="file" class=" form-control custom-file-input" name="photo" id="userPhoto">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-dark">Submit</button>
                </div>
        </div>
        </form>
    </div>
</div>