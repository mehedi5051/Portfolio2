@extends('backend.layout.app');

@section('title', 'dashboard');

@section('content');

        <!-- main content start -->
            <main>
                <div class="container-fluid px-4">
                    <div class="d-flex justify-content-between align-items-center mt-4 mb-3">
                        <h1 class="m-0">Contact Page</h1>

                        <a href="contact-edit.html" class="btn btn-primary">
                            <i class="bi bi-plus-circle"></i> Create Contact
                        </a>
                    </div>

                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Contact</li>
                    </ol>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="bi bi-table me-2"></i>
                            Contact DataTable
                        </div>

                        <div class="card-body">
                            <table id="datatablesSimple" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Message</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Example</td>
                                        <td>example@gmail.com</td>
                                        <td>01234567890</td>
                                        <td>Some message here...</td>
                                        <td class="text-nowrap" style="width: 180px;">
                                            <div class="d-flex gap-2">
                                                <a href="" class="btn btn-warning btn-sm">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>

                                                <form action="" method="post">
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <!-- main content end -->


@endsection;