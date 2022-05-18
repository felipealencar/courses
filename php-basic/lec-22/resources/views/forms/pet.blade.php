<form action="{{isset($route)?$route:route('pets.store')}}" method="POST" >
    {{csrf_field()}}
    <input type="hidden" name="_method" value="{{isset($method)?$method:'POST'}}"/>
        <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control {{ $errors->has('nome') ? ' is-invalid' : '' }}" name="nome" id="nome" value="{{old('nome',$model->nome)}}" placeholder="" maxlength="30" required="required" >
          @if($errors->has('nome'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('nome') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="idade">Idade</label>
        <input type="number" class="form-control {{ $errors->has('idade') ? ' is-invalid' : '' }}" name="idade" id="idade" value="{{old('idade',$model->idade)}}" placeholder="" required="required" >
          @if($errors->has('idade'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('idade') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="categoria">Categoria</label>
        <input type="text" class="form-control {{ $errors->has('categoria') ? ' is-invalid' : '' }}" name="categoria" id="categoria" value="{{old('categoria',$model->categoria)}}" placeholder="" maxlength="30" required="required" >
          @if($errors->has('categoria'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('categoria') }}</strong>
    </div>
  @endif 
    </div>


    <div class="form-group text-right ">
        <input type="reset" class="btn btn-default" value="Clear"/>
        <input type="submit" class="btn btn-primary" value="Save"/>

    </div>
</form>