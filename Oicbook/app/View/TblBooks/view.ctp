<div class="row">
        <ol class="breadcrumb">
            <li><?php echo $this->Html->link('Home','/Tblbooks');?>
            </li>
        </ol>
    </div>
    <div class="product-image">
    <?php echo $this->Html->image($TblBook['TblBook']['BOOKS_IMAGE'],array('class'=>'bigimg'));?>
    </div>
    <div class="product-row">
        <ul>
        <li><span id="row-title">
            <?php echo $TblBook['TblBook']['BOOKS_NAME'];?>
        </span></li>
        <li><span id="row-writer">
                著者　
            <?php echo $TblBook['TblBook']['BOOKS_WRITER'];?>
        </span></li>
        <li><span id="row-price">
                価格　￥ 
            <?php echo $TblBook['TblBook']['BOOKS_PRICE'];?>
        </span></li>
                <li><span id="row-conpany">
                出版社　
            <?php echo $TblBook['TblBook']['BOOKS_COMPANY'];?>
        </span></li></ul>
                        <li><span id="row-conpany">
                概要　　
            <?php echo $TblBook['TblBook']['BOOKS_COMMENT'];?>
        </span></li></ul>
    </div>  
            <?php echo $this->Form->create('Cart',array('id'=>'add-form','url'=>array('Controller'=>'carts','action'=>'add')));?>
            <?php echo $this->Form->hidden('Tblbook_id',array('value'=>$TblBook['TblBook']['id']))?>
            <?php echo $this->Form->submit('カートに入れる',array('class'=>'btn-success btn btn-lg'));?>
            <?php echo $this->Form->end();?>
</div>
<script>
        $(document).ready(function(){
            $('#add-form').submit(function(e){
                e.preventDefault();
                var tis = $(this);
                $.post(tis.attr('action'),tis.serialize(),function(data){
                    $('#cart-counter').text(data);
                    window.location.reload();
                });
            });
        });
</script>
