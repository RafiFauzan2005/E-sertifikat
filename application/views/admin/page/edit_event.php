<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Edit Event</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/Dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Data Kegiatan</li>
            </ol>
        </div>
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <form action="<?= base_url('Admin/Event/EditEvent') ?>" method="post"
                                    class="forms-sample">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Event Name</label>
                                        <input type="hidden" class="form-control" id="exampleInputUsername1"
                                            name="event_id" value="<?= $event->event_id ?>" placeholder="" readonly>
                                        <input type="text" class="form-control" id="exampleInputUsername1"
                                            name="event_name" value="<?= $event->event_name ?>"
                                            placeholder="Event Name">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Event Date</label>
                                        <input type="date" class="form-control" id="exampleInputUsername1"
                                            name="event_date" value="<?= $event->event_date ?>"
                                            placeholder="Event Date">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Location</label>
                                        <input type="text" class="form-control" id="exampleInputUsername1"
                                            name="location" value="<?= $event->location ?>" placeholder="Location">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Organizer</label>
                                        <input type="text" class="form-control" id="exampleInputUsername1"
                                            name="organizer" value="<?= $event->organizer ?>" placeholder="Organizer">
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-primary me-2">Edit</button>
                                    <a href="<?= base_url('Admin/Event') ?>" class="btn btn-danger">Cancel</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>