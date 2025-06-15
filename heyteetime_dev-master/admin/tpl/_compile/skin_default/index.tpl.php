<?php /* Template_ 2.2.8 2024/01/29 18:25:27 /home/agl/www/admin/_global/skin_default/index.tpl 000029770 */ ?>
<?php $this->print_("head",$TPL_SCP,1);?>


<script>
	$(function() {
		//Nice select
		$('.bulk-actions').niceSelect();
	});
</script>      

            <!--Content right-->
            <div class="col-sm-9 col-xs-12 content pt-3 pl-0">
                <h5 class="mb-3" ><strong>Dashboard</strong></h5>
                
                <!--Dashboard widget-->
                <div class="mt-1 mb-3 button-container">
                    <div class="row pl-0">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="bg-white border shadow">
                                <div class="media p-4">
                                    <div class="align-self-center mr-3 rounded-circle notify-icon bg-theme">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <div class="media-body pl-2">
                                        <h3 class="mt-0 mb-0"><strong>$300k</strong></h3>
                                        <p><small class="text-muted bc-description">Ttoal Revenue</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="bg-white border shadow">
                                <div class="media p-4">
                                    <div class="align-self-center mr-3 rounded-circle notify-icon bg-danger">
                                        <i class="fas fa-envelope-open"></i>
                                    </div>
                                    <div class="media-body pl-2">
                                        <h3 class="mt-0 mb-0"><strong>3.1M</strong></h3>
                                        <p><small class="text-muted bc-description">Customers</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="bg-theme border shadow">
                                <div class="media p-4">
                                    <div class="align-self-center mr-3 rounded-circle notify-icon bg-white">
                                        <i class="fa fa-tags text-theme"></i>
                                    </div>
                                    <div class="media-body pl-2">
                                        <h3 class="mt-0 mb-0"><strong>1022</strong></h3>
                                        <p><small class="bc-description text-white">Total Products</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/Dashboard widget-->

                <div class="row mt-3">
                    <div class="col-sm-6">
                        <!--Jvector world map-->
                        <div class="mt-1 mb-3 p-3 button-container bg-white shadow-sm border">
                            <h6 class="mb-3">World Market</h6><hr>
                            
                            <div id="worldMarket" style="width: 100%; height: 350px"></div>
                            
                        </div>
                        <!--/Jvector world map-->

                    </div>
                    
                    
                    <div class="col-sm-6">
                        <!--Revenue Graph-->
                        <div class="mt-1 mb-3 button-container bg-white border shadow-sm p-3">
                            <h6 class="mb-3">Revenue vs Cost Graph</h6><hr>

                            <div class="ct-chart" id="costRevenue"  style="height: 350px;"></div>

                        </div>
                        <!--/Revenue Graph-->
                    </div>
                </div>

                <!--Chart Section-->
                <div class="mt-1 mb-3 p-3 button-container bg-white shadow-sm border">
                    <h6>Analytics overview</h6><hr>
                    <div class="row mb-3">
                        <div class="col-sm-4 ol-12">
                            <h1 class="text-success">1560</h1>
                            <h5>Customers</h5>
                        </div>
                        <div class="col-sm-4 ol-12 text-center">
                            <h1 class="text-theme">1300</h1>
                            <h5>Orders</h5>
                        </div>
                        <div class="col-sm-4 ol-12 text-right">
                            <h1 class="text-danger">$5545</h1>
                            <h5>Revenue</h5>
                        </div>
                    </div>

                    <canvas id="orderRevenue" class="orderRevenue pt-1" height="100px"></canvas>
                </div>
                <!--Chart Section-->

                <div class="mt-4 mb-4 p-3 bg-white border shadow-sm lh-sm">
                    <!--Order Listing-->
                    <div class="product-list">
                        
                        <div class="row border-bottom mb-4">
                            <div class="col-sm-8 pt-2"><h6 class="mb-4 bc-header">Order listing</h6></div>
                            <div class="col-sm-4 text-right pb-3">
                                <button type="button" class="btn btn-danger icon-round shadow pull-right">
                                    <i class="fas fa-trash"></i>
                                </button>

                                <div class="pull-right mr-3 btn-order-bulk">
                                    <select class="shadow bg-secondary bulk-actions">
                                        <option data-display="<span class='text-white'><b>Bulk status</b></span>">Status options</option>
                                        <option value="1">Pending</option>
                                        <option value="2">Cancelled</option>
                                        <option value="4">Delivered</option>
                                    </select>
                                </div>

                                <div class="clearfix"></div>
                            </div>
                        </div>
                        
                        <div class="table-responsive product-list">
                            
                            <table class="table table-bordered table-striped mt-0" id="productList">
                                <thead>
                                    <tr>
                                        <th style="width: 10px;" class="p-0 pr-4 align-middle">
                                            <div class="form-check-box cta">
                                                <span class="color1">
                                                    <input type="checkbox" id="orderAll">
                                                    <label for="orderAll"></label>
                                                </span>
                                            </div>
                                        </th>
                                        <th>Order ID</th>
                                        <th>Customer</th>
                                        <th>Status</th>
                                        <th>Total</th>
                                        <th>Order date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 10px;" class="p-0 pr-1 align-middle">
                                            <div class="form-check-box cta">
                                                <span class="color1">
                                                    <input type="checkbox" id="order1">
                                                    <label for="order1"></label>
                                                </span>
                                            </div>
                                        </td>
                                        <td>Ord#13</td>
                                        <td class="align-middle">
                                            Stephanie Cott
                                        </td>
                                        <td class="align-middle"><span class="badge badge-warning">Pending</span></td>
                                        <td class="align-middle">$200</td>
                                        <td>15/09/2018</td>
                                        <td class="align-middle text-center">
                                            <button class="btn btn-theme" data-toggle="modal" data-target="#orderInfo">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                            <button class="btn btn-success" data-toggle="modal" data-target="#orderUpdate"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 10px;" class="p-0 pr-1 align-middle">
                                            <div class="form-check-box cta">
                                                <span class="color1">
                                                    <input type="checkbox" id="order2">
                                                    <label for="order2"></label>
                                                </span>
                                            </div>
                                        </td>
                                        <td>Ord#14</td>
                                        <td class="align-middle">
                                            Andy Webb
                                        </td>
                                        <td class="align-middle"><span class="badge badge-danger">Cancelled</span></td>
                                        <td class="align-middle">$200</td>
                                        <td>15/09/2018</td>
                                        <td class="align-middle text-center">
                                            <button class="btn btn-theme" data-toggle="modal" data-target="#orderInfo">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                            <button class="btn btn-success" data-toggle="modal" data-target="#orderUpdate"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 10px;" class="p-0 pr-1 align-middle">
                                            <div class="form-check-box cta">
                                                <span class="color1">
                                                    <input type="checkbox" id="order3">
                                                    <label for="order3"></label>
                                                </span>
                                            </div>
                                        </td>
                                        <td>Ord#15</td>
                                        <td class="align-middle">
                                            Andy Webb
                                        </td>
                                        <td class="align-middle"><span class="badge badge-success">Delivered</span></td>
                                        <td class="align-middle">$200</td>
                                        <td>15/09/2018</td>
                                        <td class="align-middle text-center">
                                            <button class="btn btn-theme" data-toggle="modal" data-target="#orderInfo">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                            <button class="btn btn-success" data-toggle="modal" data-target="#orderUpdate"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 10px;" class="p-0 pr-1 align-middle">
                                            <div class="form-check-box cta">
                                                <span class="color1">
                                                    <input type="checkbox" id="order4">
                                                    <label for="order4"></label>
                                                </span>
                                            </div>
                                        </td>
                                        <td>Ord#16</td>
                                        <td class="align-middle">
                                            Stephanie Cott
                                        </td>
                                        <td class="align-middle"><span class="badge badge-warning">Pending</span></td>
                                        <td class="align-middle">$200</td>
                                        <td>15/09/2018</td>
                                        <td class="align-middle text-center">
                                            <button class="btn btn-theme" data-toggle="modal" data-target="#orderInfo">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                            <button class="btn btn-success" data-toggle="modal" data-target="#orderUpdate"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 10px;" class="p-0 pr-1 align-middle">
                                            <div class="form-check-box cta">
                                                <span class="color1">
                                                    <input type="checkbox" id="order5">
                                                    <label for="order5"></label>
                                                </span>
                                            </div>
                                        </td>
                                        <td>Ord#17</td>
                                        <td class="align-middle">
                                            Andy Webb
                                        </td>
                                        <td class="align-middle"><span class="badge badge-danger">Cancelled</span></td>
                                        <td class="align-middle">$200</td>
                                        <td>15/09/2018</td>
                                        <td class="align-middle text-center">
                                            <button class="btn btn-theme" data-toggle="modal" data-target="#orderInfo">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                            <button class="btn btn-success" data-toggle="modal" data-target="#orderUpdate"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 10px;" class="p-0 pr-1 align-middle">
                                            <div class="form-check-box cta">
                                                <span class="color1">
                                                    <input type="checkbox" id="order6">
                                                    <label for="order6"></label>
                                                </span>
                                            </div>
                                        </td>
                                        <td>Ord#18</td>
                                        <td class="align-middle">
                                            Andy Webb
                                        </td>
                                        <td class="align-middle"><span class="badge badge-success">Delivered</span></td>
                                        <td class="align-middle">$200</td>
                                        <td>15/09/2018</td>
                                        <td class="align-middle text-center">
                                            <button class="btn btn-theme" data-toggle="modal" data-target="#orderInfo">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                            <button class="btn btn-success" data-toggle="modal" data-target="#orderUpdate"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 10px;" class="p-0 pr-1 align-middle">
                                            <div class="form-check-box cta">
                                                <span class="color1">
                                                    <input type="checkbox" id="order7">
                                                    <label for="order7"></label>
                                                </span>
                                            </div>
                                        </td>
                                        <td>Ord#19</td>
                                        <td class="align-middle">
                                            Stephanie Cott
                                        </td>
                                        <td class="align-middle"><span class="badge badge-warning">Pending</span></td>
                                        <td class="align-middle">$200</td>
                                        <td>15/09/2018</td>
                                        <td class="align-middle text-center">
                                            <button class="btn btn-theme" data-toggle="modal" data-target="#orderInfo">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                            <button class="btn btn-success" data-toggle="modal" data-target="#orderUpdate"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                            </table>

                            <div class="text-right">
                                <button class="btn btn-outline-theme"><i class="fa fa-eye"></i> View full orders</button>
                            </div>
                        </div>
                    </div>
                    <!--/Order Listing-->

                    <!--Order Info Modal-->
                    <div class="modal fade" id="orderInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Ord#13 details</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="row">Item</th>
                                                <th>Quantity</th>
                                                <th>Unit price</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row">Red Shoes</td>
                                                <td>2</td>
                                                <td>$400</td>
                                                <td>$800</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">Blue shirt</td>
                                                <td>1</td>
                                                <td>$400</td>
                                                <td>$400</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">Knickers</td>
                                                <td>3</td>
                                                <td>$300</td>
                                                <td>$900</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="text-right mt-4 p-4">
                                        <p><strong>Sub - Total amount: $14,768.00</strong></p>
                                        <p><strong>Shipping: $1000.00</strong></p>
                                        <p><span>vat(10%): $150.00</span></p>
                                        <h4 class="mt-2"><strong>Total: $16,050.00</strong></h4>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Order Info Modal-->

                    <!--Order Update Modal-->
                    <div class="modal fade" id="orderUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Ord#13 details update</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th scope="row">Item</th>
                                                <th class="order-qty-head">Quantity</th>
                                                <th>Unit price</th>
                                                <th>Total</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="align-middle">01</td>
                                                <td scope="row" class="align-middle">Red Shoes</td>
                                                <td class="text-center align-middle"><input type="text" value="2" class="order-qty"></td>
                                                <td class="align-middle">$400</td>
                                                <td class="align-middle">$800</td>
                                                <td style="width: 120px;" class="align-middle">
                                                    <button class="btn btn-theme mr-1"><i class="fa fa-pencil-square-o"></i></button>
                                                    <button class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">02</td>
                                                <td class="align-middle" scope="row">Blue shirt</td>
                                                <td class="text-center align-middle"><input type="text" value="1" class="order-qty"></td>
                                                <td class="align-middle">$400</td>
                                                <td class="align-middle">$400</td>
                                                <td class="align-middle">
                                                    <button class="btn btn-theme mr-1"><i class="fa fa-pencil-square-o"></i></button>
                                                    <button class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">03</td>
                                                <td class="align-middle" scope="row">Knickers</td>
                                                <td class="text-center align-middle"><input type="text" value="3" class="order-qty"></td>
                                                <td class="align-middle">$300</td>
                                                <td class="align-middle">$900</td>
                                                <td class="align-middle">
                                                    <button class="btn btn-theme mr-1"><i class="fa fa-pencil-square-o"></i></button>
                                                    <button class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="text-right mt-4 p-4">
                                        <p><strong>Sub - Total amount: $14,768.00</strong></p>
                                        <p><strong>Shipping: $1000.00</strong></p>
                                        <p><span>vat(10%): $150.00</span></p>
                                        <h4 class="mt-2"><strong>Total: $16,050.00</strong></h4>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Order Update Modal-->
                </div>
<?php $this->print_("bottom",$TPL_SCP,1);?>