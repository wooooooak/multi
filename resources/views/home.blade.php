<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
    <title></title>
  </head>
  <body>

    <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
      Sign up/ Sign in
    </button>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
              ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

    <script src="{{ elixir('js/app.js') }}"></script>
  </body>
</html>
