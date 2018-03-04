<div class="col-md-9">
  {{ $script }}

  {!! $script !!}

  {{ isset($bvar) ? $bvar : $title }} = {{ $bvar or $title }}


  @if (count($data) < 3)
    В массиве меньше трёх
  @elseif(count($data) == 3)
    В массиве три
  @else
    Больше трёх
  @endif

  <ul>
    @for($i = 0; $i < count($dataI); $i++)
      <li>{{ $dataI[$i] }}</li>
    @endfor
  </ul>

  <ul>
    @foreach($data as $k=>$value)
      <li>{{ $k . ' => ' . $value }}</li>
    @endforeach
  </ul>

  <ul>
    @forelse($data as $k=>$value)
      <li>{{ $k . ' => ' . $value }}</li>

    @empty
      <p>Нет значений в массиве</p>
    @endforelse
  </ul>

  @each('bootstrap.list', $dataI, 'value')

            <div class="col-md-6">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-6">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div>
            <!-- <div class="col-md-4">
              <h2>Heading</h2>
              <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
              <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div> -->

            <div style="clear: both;"></div>
            <div class="blog-post">
              <div class="page-header">
                <h1>Заголовок</h1>
              </div>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div>
          </div>