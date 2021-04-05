@foreach ($carCat as $car)
    <li class="dropdown menu-item">
        <a href="/carCat/{{$car->id}}" >{{$car->car_category}}</a>
    </li><!-- /.menu-item -->
@endforeach

