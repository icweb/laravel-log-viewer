@extends('layout')

@section('body')
    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <select name="select_website" id="select_website" class="form-control" onchange="App.changeSite()">
                    <option value="x" selected disabled>Select a Website</option>
                    @foreach($sites as $item)
                        <option value="{{ $item->key }}">{{ $item->val }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group" id="logButtons" style="display:none">
                <a href="javascript:void(0)" class="btn btn-success" onclick="App.clearLogs();">Clear Logs</a>
                <a href="javascript:void(0)" class="btn btn-info" onclick="App.refreshLogs();">Refresh Logs</a>
            </div>
            <div>
                <iframe id="frame" style="width:100%;height:2000px" src="/frame?topic=empty"></iframe>
            </div>
        </div>
    </div>
@stop

@section('footer')
    <script type="text/javascript">

        var App = {

            changeSite: function(){

                var activeSite = document.getElementById('select_website').value;
                var url = '/frame?topic=logs&source=' + activeSite;
                document.getElementById('frame').setAttribute('src', url);
                $('#logButtons').show();

            },

            clearLogs: function(){

                var activeSite = document.getElementById('select_website').value;
                var url = '/frame?topic=clearlogs&source=' + activeSite;
                document.getElementById('frame').setAttribute('src', url);
                $('#logButtons').hide();
                document.getElementById('select_website').value = 'x';

            },

            refreshLogs: function(){

                var activeSite = document.getElementById('select_website').value;
                var url = '/frame?topic=logs&source=' + activeSite;
                document.getElementById('frame').setAttribute('src', '');
                document.getElementById('frame').setAttribute('src', url);

            }

        };

    </script>
@stop