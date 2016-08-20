  @if ($errors->any())

<div class="alert alert-dismissible alert-warning">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <h4>Warning!</h4>
  <p>
     @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
      
    </p>
    
    
</div>
    @endif