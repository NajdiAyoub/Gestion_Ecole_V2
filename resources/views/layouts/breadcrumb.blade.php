<div class="content-header">

    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    @for ($i=0;$i<count($datas)-1;$i++)
                    <li class="breadcrumb-item"><a href="{{$datas[$i]->link}}">{{$datas[$i]->value}}</a></li>&nbsp;/&nbsp;                           
                    @endfor
                    <li class="brearumb-item active">{{$datas[count($datas)-1]}}</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>