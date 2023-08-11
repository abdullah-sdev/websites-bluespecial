<div class="breadcrumb">
    <div class="crumbs">
        <a href="{{url('/')}}">Home</a> » How To Order
    </div>
    <form action="{{url('/order-report')}}" method="POST" class="vin-report-form">
        @csrf
        <input type="text" class="search-header" placeholder="Enter Vin" name="vin">
        <button type="submit" class="search-glass"> <img src="{{url('frontend/img/magnifying-glass.png')}}" alt=""></button>
    </form>
</div>
