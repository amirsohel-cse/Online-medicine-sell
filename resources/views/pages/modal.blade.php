

<div class="modal fade bd-example-modal-lg" id="productModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" align="center" id="myModalLabel">Product Details</h4>
            </div>
            <div class="modal-body product-modal-body panel panel-default">
                <div class="center">
                    <img class="product-img-modal" id="pimage" src="">
                </div>
                <br>

                <div class="list-group">

                    <div class="list-group-item flex-row" >
                        <span class="flex-item-25 font-bold"> Price: </span>
                        <span class="flex-item-75 pull-right" id="mprice" > ৳ 70 TK </span>
                    </div>

                    <div class="list-group-item flex-row">
                        <span class="flex-item-25 font-bold"> Name: </span>
                        <span class="flex-item-75 pull-right " id="pname"> Eromycin  </span>
                    </div>

                    <div class="list-group-item flex-row" id="mgeneric">
                        <span class="flex-item-25 font-bold"> Generic: </span>
                        <span class="flex-item-75 pull-right " id="pgeneric"> Erythromycin </span>
                    </div>

                    <div class="list-group-item flex-row">
                        <span class="flex-item-25 font-bold"> Type: </span>
                        <span class="flex-item-75 pull-right" id="ptype"> Suspension </span>
                    </div>
                    <div class="list-group-item flex-row" id="mquantity">
                        <span class="flex-item-25 font-bold"> Quantity: </span>
                        <span class="flex-item-75 pull-right" id="quantity"> No </span>
                    </div>
                    <div class="list-group-item flex-row" id="msize">
                        <span class="flex-item-25 font-bold"> Size: </span>
                        <span class="flex-item-75 pull-right " id="psize"> No </span>
                    </div>
                    <div class="list-group-item flex-row" id="mperpata">
                        <span class="flex-item-25 font-bold">Pieces Per Pata: </span>
                        <span class="flex-item-75 pull-right " id="pperpata"> No </span>
                    </div>


                    <div class="list-group-item flex-row" id="mdose">
                        <span class="flex-item-25 font-bold" > Dose: </span>
                        <span class="flex-item-75 pull-right" id="pdose"> 100ml bot/suspension </span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" name="btn" value="" id="addid" class="btn btn-success btn-block" data-dismiss="modal">Add to Cart</button>
                <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
