<!DOCTYPE html>
<html lang="en">
@include('layouts.header')
<body>
@include('layouts.nav')
@yield('title','')
@yield('sectioncontent')

<!-- Content -->
{{--<div class="content container mt-5">--}}
{{--    <h2 class="mb-4">Simple Table</h2>--}}
{{--    <table class="table table-striped">--}}
{{--        <thead>--}}
{{--        <tr>--}}
{{--            <th scope="col">#</th>--}}
{{--            <th scope="col">First Name</th>--}}
{{--            <th scope="col">Last Name</th>--}}
{{--            <th scope="col">Username</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--        <tr>--}}
{{--            <th scope="row">1</th>--}}
{{--            <td>John</td>--}}
{{--            <td>Doe</td>--}}
{{--            <td>@johndoe</td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <th scope="row">2</th>--}}
{{--            <td>Mary</td>--}}
{{--            <td>Smith</td>--}}
{{--            <td>@marysmith</td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <th scope="row">3</th>--}}
{{--            <td>James</td>--}}
{{--            <td>Johnson</td>--}}
{{--            <td>@jamesjohnson</td>--}}
{{--        </tr>--}}
{{--        </tbody>--}}
{{--    </table>--}}
{{--</div>--}}

@include('layouts.footer')
</body>

</html>
