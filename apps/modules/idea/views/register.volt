{% extends 'layout.volt' %}

{% block title %}Registration{% endblock %}

{% block styles %}

{% endblock %}

{% block content %}

<div class="idea">
    <h1 class="text-center">Registration</h1><br>
    <div class="card">
        <div class="card-body">
            <form action="/idea/register" method="POST">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="fullName" required>
                    <label for="">Email</label>
                    <input type="email" name="userEmail" class="form-control" required>
                    <small class="text-muted">Domain must end in @idy.local</small>
                </div>
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="userName" required>
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

{% endblock %}

{% block scripts %}

{% endblock %}