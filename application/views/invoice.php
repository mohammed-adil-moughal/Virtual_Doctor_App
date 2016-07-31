            <ol class="breadcrumb bc-2 hidden-print">
                <li> <a href="<?php echo base_url(); ?>">Home</a> </li>
                <li> <a href="<?php echo base_url(); ?>user/view/<?php echo $user->id; ?>"><?php echo $user->firstname.' '.$user->lastname; ?></a></li>
                <li class="active"> <strong>Invoice</strong> </li>
            </ol>
            <div class="row">
            	<div class"col-md-12">
            		<div class="alert alert-success">
            			Kindly make payment first before proceeding.
            		</div>
            	</div>
            </div>

            <br class="hidden-print" />
            <div class="invoice">
                <div class="row">
                    <div class="col-sm-6 invoice-left">
                        <a href="#"> <h1 style="">E-Daktari</h1></a>
                    </div>
                    <div class="col-sm-6 invoice-right">
                        <h3>Invoice No. #5652256</h3> <span><?php echo date("d M Y"); ?></span> </div>
                </div>
                <hr class="margin" />
                <div class="row">
                    <div class="col-sm-6 invoice-left">
                        <h4>Client</h4> <?php echo $loggedUserInfo->firstname.' '.$loggedUserInfo->lastname ?>
                        <br /> <?php echo $loggedUserInfo->email ?>
                        <br /> Kenya
                    </div>
                    <div class="col-md-6 invoice-right">
                        <h4>Payment Details:</h4> <strong>M-Pesa Business #:</strong> 220220
                        <br /> <strong>Account Name:</strong> EDAKTARIDEMO
                    </div>
                </div>
                <?php
                	$doctor_rate = 2000;
                	$discount = 1;
                	$discountAmt = $doctor_rate*$discount/100;
                	$vat = 16;
                	$vatAmt = ($doctor_rate-$discountAmt)*($vat/100)
                ?>
                <div class="margin"></div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th width="60%">Service</th>
                            <th>Rate</th>
                            <th>Totals</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Consultation Fees</td>
                            <td>KES. <?php echo number_format((float)$doctor_rate, 2, '.', ''); ?></td>
                            <td class="text-right">KES. <?php echo number_format((float)$doctor_rate, 2, '.', ''); ?></td>
                        </tr>
                    </tbody>
                </table>
                <div class="margin"></div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="invoice-left">
                            Doctor's Name
                            <br /> E-Daktari Ltd.
                            <br /> P: (254) 700 123456
                            <br /> Nairobi, Kenya
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="invoice-right">
                            <ul class="list-unstyled">
                                <li>
                                    Sub - Total amount:
                                    <strong>KES. <?php echo number_format((float)$doctor_rate, 2, '.', ''); ?></strong> </li>
                                <li>
                                    VAT:
                                    <strong><?php echo $vat; ?>%</strong> </li>
                                <li>
                                    Discount:
                                    <strong>KES. <?php echo number_format((float)$discountAmt, 2, '.', ''); ?></strong>
                                </li>
                                <li>
                                    Grand Total:
                                    <strong>KES. <?php echo number_format((float)($doctor_rate-$discountAmt+$vatAmt), 2, '.', ''); ?></strong> </li>
                            </ul>
                            <br /> <a href="javascript:window.print();" class="btn btn-primary btn-icon icon-left hidden-print">
Print Invoice
<i class="entypo-doc-text"></i> </a> &nbsp;
                            <a href="<?php echo base_url(); ?>user/pay/<?php echo $user->id; ?>" class="btn btn-success btn-icon icon-left hidden-print">
Make Payment
<i class="fa fa-usd"></i> </a> </div>
                    </div>
                </div>
            </div>
            