<form action="{{isset($route)?$route:route('produtos.store')}}" method="POST" >
    {{csrf_field()}}
    <input type="hidden" name="_method" value="{{isset($method)?$method:'POST'}}"/>
        <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control {{ $errors->has('nome') ? ' is-invalid' : '' }}" name="nome" id="nome" value="{{old('nome',$model->nome)}}" placeholder="" maxlength="255" required="required" >
          @if($errors->has('nome'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('nome') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="preco">Preco</label>
        <input type="text" class="form-control {{ $errors->has('preco') ? ' is-invalid' : '' }}" name="preco" id="preco" value="{{old('preco',$model->preco)}}" placeholder="" required="required" >
          @if($errors->has('preco'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('preco') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="quantidade">Quantidade</label>
        <input type="number" class="form-control {{ $errors->has('quantidade') ? ' is-invalid' : '' }}" name="quantidade" id="quantidade" value="{{old('quantidade',$model->quantidade)}}" placeholder="" required="required" >
          @if($errors->has('quantidade'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('quantidade') }}</strong>
    </div>
  @endif 
    </div>


    <div class="form-group text-right ">
        <input type="reset" class="btn btn-default" value="Clear"/>
        <input type="submit" class="btn btn-primary" value="Save"/>

    </div>
</form>