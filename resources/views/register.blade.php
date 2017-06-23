@extends('layout')

@section('content')
    <div class="content">
        <div class="alert" id="message"></div>

        <div id="idtable">
            <h1>ID Table</h1>

            <table class="table table-condensed table-bordered table-striped">
                <thead>
                <tr>
                    <th>Avator</th>
                    <th>ID/Nick</th>
                    <th>Group</th>
                    <th>B.ID</th>
                    <th>Introducer</th>
                    <th>Memo</th>
                    <th>LastLogin</th>
                </tr>
                </thead>
                <tbody>
                <!--table body-->
                </tbody>
            </table>
        </div>
    </div>
@stop