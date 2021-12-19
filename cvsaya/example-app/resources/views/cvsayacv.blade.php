@extends('partials/cvsayatopborder')

@section('content')
<form action="input" method="POST">
    @csrf
    <div class="col-12">
        <label style="font-weight:bold; font-size:20px;"><?= $title ?></label>
    </div>
    <?= $form ?>
    <div class='col-4 mt-3'>
        <input type="submit" name="simpan" style=" height: 30px; padding-top: 7px; background:  #4FD240; border-radius: 5px; text-align: center;
        font-size: 10px; border: 1px solid #12B533; color:white; font-weight: bold; display:block;"/>
    </div>
</form>
@endsection
@section('table')
            <?=$table;?>
            </tbody>
        </table>
    </div>
@endsection

