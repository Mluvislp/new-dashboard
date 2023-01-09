@extends('layout')

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <main class="main-content header-has-action">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Role</h3>
                        </div>
                    </div>
                    <?php if(isset($msg_info["status"]))  {?>
                        <div class="clearfix"></div>
                    <?php } ?>
                    <?php $message_success = isset($msg_del["success"])? $msg_del["success"] :'';
                    $message_error = isset($msg_del["error"])? $msg_del["error"] :'';
                    if(!empty($message_success)) { ?>
                        <div class="clearfix"></div>
                        <div  class="alert alert-success alert-dismissible fade in" role="alert">
                                <?php echo $message_success; ?>
                        </div>
                    <?php }if(!empty($message_error)) { ?>
                    <div class="clearfix"></div>
                    <div  class="alert alert-error alert-dismissible fade in" role="alert">
                            <?php echo $message_error; ?>
                    </div>
                    <?php } ?>
                    <div class="clearfix"></div>
                    <form class="searchForm" name="form-role" method="post" action="">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <div class="row ">
                                            <div class="col-md-1">
                                                <h2 class="">Keyword</h2>
                                            </div>
                                            <div class="col-md-4">
                                                <input maxlength="255" class="form-control" type="text" name="txtSearch" placeholder="ID, Name" value="<?php echo isset($keyword) ? $keyword : ""; ?>">
                                            </div>
                                            <div class="col-md-2">
                                                <button type="button" name="search" class="btn btn-success">Search</button>
                                                {{--                                <a class="btn btn-info" href="<?php echo $this->url->get("/role/create"); ?>">Add New</a>--}}
                                            </div>

                                        </div>
                                        <div >
                                            <strong>Total</strong>
                                            records
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered">
                                                <thead >
                                                <tr class="headings">
                                                    <th style="text-align: left" width="50px"><label class="container_checkbox"><input type="checkbox" id="checkboxAll"><span class="checkmark_checkbox"></span></label></th>
                                                    <th width="50px" class="column-title">ID </th>
                                                    <th  class="column-title">Name </th>
                                                    <th width="50px" class="column-title">Order </th>
                                                    <th width="50px" class="column-title">Active </th>
                                                    <th width="50px" class="column-title no-link last"><span class="nobr">Action</span></th>
                                                </tr>
                                                </thead>

                                                <tbody class="tb_body">
                                                <tr >
                                                    <td><label class="container_checkbox"><input class="check" name="item[]" value="" type="checkbox"><span class="checkmark_checkbox"></span></label></td>
                                                    <td class=" "></td>
                                                    <td class=" ">name</td>
                                                    <td class=" ">1</td>
                                                    <td class="text-center" data-title="Active">
                                                        <span class="label label"></span>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="row">
                                            <div class="col-md-6 ">
                                                <label for="slAction">With Selected:</label>
                                                <select class="form-control" id="slcAction" name="slcAction" style="display: inline-block;width: 40%">
                                                    <option value="" selected >Please select</option>
                                                    <option value="drop" >Drop</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </div>


@endsection
