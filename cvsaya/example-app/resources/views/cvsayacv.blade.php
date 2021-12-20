@extends('partials/cvsayatopborder')

@section('form')
@if($errors->any())
    <?= "<script> alert('".$errors->first()."')</script>"?>
@endif
<form action="input" method="POST">
    @csrf
    <div class="row gy-2" id="content-area">
        <div class="col-12">
            <label style="font-weight:bold; font-size:20px;"><?= $title ?></label>
            <input type="hidden" name="title" value="<?=$title?>">
        </div>
        <?= $form ?>
        <div class='col-4 mt-3'>
            <input type="submit" name="simpan" style=" float:right;width:80%;height: 30px; padding-top: 4px; background: #4FD240; border-radius: 5px; text-align: center; font-size: 10px; border: 1px solid #12B533; color:white; font-weight: bold; display:block;"/>
        </div>
    </div>
</form>
@endsection
@section('table')
    <?=$table;?>
@endsection

