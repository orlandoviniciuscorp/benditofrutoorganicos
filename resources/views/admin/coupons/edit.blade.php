@extends('layouts.admin.app')

@section('content')
    <!-- Main content -->
    <section class="content">
        @include('layouts.errors-and-messages')
        <div class="box">
            <form action="{{ route('admin.coupons.store') }}" method="post" class="form">
                <div class="box-body">
                    {{ csrf_field() }}
                    <div class="col-md-6">
                        <h2>Cupons</h2>
                        <div class="form-group">
                            <input type="hidden" name="id" value="{{$coupon->id}}" />
                            <label for="name">Nome <span class="text-danger">*</span></label>
                            <input type="text" name="name" value={{$coupon->name}} id="name" placeholder="Nome" class="form-control" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label for="description">Descrição </label>
                            <textarea class="form-control"  name="description" id="description" rows="5" placeholder="Descrição">{{$coupon->description}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="name">Percentual <span class="text-danger">*</span></label>
                            <input type="text" name="percentage" value={{$coupon->percentage}} id="percentage" placeholder="Percentual"  pattern="[\d.]*" class="form-control" value="{{ old('name') }}">
                        </div>

                        <div class="form-group">
                            <label for="name">Início da Validade <span class="text-danger">*</span></label>
                            <input type="date" name="start_at" value={{$coupon->start_at}}  id="start_at" placeholder="dd/mm/yyy" class="form-control" value="{{ old('name') }}">
                        </div>

                        <div class="form-group">
                            <label for="name">Expira em: <span class="text-danger">*</span></label>
                            <input type="date" name="expires_at" value={{$coupon->expires_at}} id="expires_at" placeholder="dd/mm/yyyy" class="form-control" value="{{ old('name') }}">
                        </div>

                        @include('admin.shared.status-select', ['status' => 0])
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <div class="btn-group">
                        <a href="{{ route('admin.products.index') }}" class="btn btn-default">Voltar</a>
                        <button type="submit" class="btn btn-primary">Editar</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection
