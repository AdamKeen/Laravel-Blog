<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <meta charset="UTF-8" />

<style>
.nav {
  background-color: black;
  padding: 10px;
}
.nav ul {
  list-style-type: none;
  padding-left: 0px;
}
.nav ul li {
  display: inline-block;
  margin: 10px;
}
.nav ul li.brand {
  font-weight: 700;
}
.nav ul li a {
  color: white;
  text-decoration: none;
}
@media (max-width: 765px) {
  .nav ul li {
    display: block;
  }
}
@media (min-width: 766px) {
  .nav ul {
    width: 50%;
    margin: auto;
  }
}
.btn {
  display: block;
}
</style>

<script src="/js/tinymce/tinymce.min.js"> </script>
  <script>
tinymce.init({
  selector: 'textarea'
});
</script>
</head>
<body>

  <div class="nav">

    <ul>

      <li class="brand"> <a href="/admin/"> Admin Panel </a> </li>

      <li> <a href="/admin/"> Home </li>

      <li> <a href="/admin/posts"> Posts </li>

      <li> <a href="/"> View Site </a> </li>

    </ul>

  </div>

  <div class="container">

    @yield('content')

  </div>

</body>
</html>
