<div class="row">
    <div class="col-xs-4"></div>
    <div class="col-xs-4"></div>
    <div class="col-xs-4">
        @if($errors->any())
            <div class="uk-notify uk-notify-top-center">
                <div class="alert alert-warning  alert-dismissible" role="alert">
                    <i class="fa fa-warning"></i>
                    <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Atenção!!</strong><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
    </div>
</div>

<div class="row">
    <div class="col-xs-4"></div>
    <div class="col-xs-4"></div>
    <div class="col-xs-4">
        @if(session('success'))
            <div class="uk-notify uk-notify-top-center">
                <div class="alert alert-success alert-dismissible" role="alert">
                    <i class="fa fa-check"></i>
                    <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Sucesso!!</strong><br>{{ session('success') }}
                </div>
            </div>
        @endif
    </div>
</div>

<div class="row">
    <div class="col-xs-4"></div>
    <div class="col-xs-4"></div>
    <div class="col-xs-4">
        @if(session('error'))
            <div class="uk-notify uk-notify-top-center">
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <i class="fa fa-ban"></i>
                    <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Opss!!</strong><br>{{ session('error') }}
                </div>
            </div>
        @endif
    </div>
</div>