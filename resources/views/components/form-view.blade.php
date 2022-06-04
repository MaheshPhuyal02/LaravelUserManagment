<div class="form-group">
<label for="name">{{$label}}</label>
    <input type="{{$type}}" name="{{$name}}" id=""
    @if ($update)
        value = "{{$value}}"
    @else
        value="{{old("$name")}}"    
    @endif
    class="form-control"  placeholder=""
        aria-describedby="helpId">
    <small id="helpId" class="text-muted">{{$example}}</small>
    <span class="text-danger"> @error($name)
        {{$message}}
        @enderror</span>
</div> 