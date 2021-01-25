@extends('admin.base')

@section('content')

<form action="" method="post" id="delete-form">
    <input type="hidden" name="username">
</form>
<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="white-box">
            <h3 class="box-title">Kids</h3>
            {% comment %} <a href="#" id="add-btn" class="btn btn-primary" data-toggle="modal" data-target="#booking">Add kid</a> {% endcomment %}
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Admission number</th>
                            <th>First name</th>
                            <th>middle name</th>
                            <th>Last name</th>
                        </tr>
                    </thead>
                    <tbody>

                        {% for kid in kids %}

                        <tr>
                            <td>{{ kid.id }}</td>
                            <td>{{ kid.first_name }}</td>
                            <td>{{ kid.middle_name }}</td>
                            <td>{{ kid.surname }}</td>
                        </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    
@endsection