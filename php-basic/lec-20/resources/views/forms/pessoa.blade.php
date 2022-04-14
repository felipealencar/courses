<form action="{{isset($route)?$route:route('pessoas.store')}}" method="POST" >
    {{csrf_field()}}
    <input type="hidden" name="_method" value="{{isset($method)?$method:'POST'}}"/>
        <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control {{ $errors->has('nome') ? ' is-invalid' : '' }}" name="nome" id="nome" value="{{old('nome',$model->nome)}}" placeholder="" maxlength="32" required="required" >
          @if($errors->has('nome'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('nome') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="cpf">Cpf</label>
        <input type="text" class="form-control {{ $errors->has('cpf') ? ' is-invalid' : '' }}" name="cpf" id="cpf" value="{{old('cpf',$model->cpf)}}" placeholder="" maxlength="20" required="required" >
          @if($errors->has('cpf'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('cpf') }}</strong>
    </div>
  @endif 
    </div>


    <div class="form-group text-right ">
        <input type="reset" class="btn btn-default" value="Clear"/>
        <input type="submit" class="btn btn-primary" value="Save"/>

    </div>
</form>