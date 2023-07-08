<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Advanced crud operations</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <h1 class="bg-dark text-light text-center py-2">PHP advanced CRUD</h1>
    <div class="container">
        <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Users</h1>
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

        <div class="row mb-3">
            <div class="col-10">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-dark"><i class="fas fa-search text-light"></i></span>
                    </div>
                    &nbsp&nbsp
                    <input type="text" class="form-control" placeholder="search user">
                </div>
            </div>
            <div class="col-2">
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#userModal">
                    Add User
                </button>
            </div>
        </div>
    </div>
    <!--------table -------->
    <div class="container">
        <table class="table" id="userTable">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Picture 1</th>
                    <td>Lawrence</td>
                    <td>lawrence@gmail.com</td>
                    <td>0716795223</td>
                    <td>
                        <span>Edit</span>
                        <span>Profile</span>
                        <span>Delete</span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>