<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Name of the Project</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('user.index')}}">Users <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('orders.index')}}">orders</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('categories.index')}}">category</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('product.index')}}">product</a>
            </li>
        </ul>
    </div>
</nav>
