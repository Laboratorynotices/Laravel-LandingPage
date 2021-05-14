@foreach ($about as $data)
  @if ($loop->odd)
    @include('layouts.landingPage.aboutBlockOdd')
  @else
    @include('layouts.landingPage.aboutBlockEven')
  @endif
@endforeach
