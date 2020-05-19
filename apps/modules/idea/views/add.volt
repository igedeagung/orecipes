{% extends 'layout.volt' %}

{% block title %}Write New Recipes{% endblock %}

{% block styles %}

{% endblock %}

{% block content %}

<div class="idea">
    <h1 class="text-center">Write New Recipes</h1><br>
    <div class="card">
        <div class="card-body">
            <form action="/idea/add" method="POST">
                <div class="form-group">
                    <label for="">Recipes Title</label>
                    <input type="text" class="form-control" name="ideaTitle" required>
                    <label for="">Materials and steps</label>
                    <textarea name="ideaDescription" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Author Name</label>
                    <input type="text" class="form-control" name="authorName" required>
                    <label for="">Author Email</label>
                    <input type="email" name="authorEmail" class="form-control" required>
                    <small class="text-muted">Domain must end in @idy.local</small>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

{% endblock %}

{% block scripts %}

{% endblock %}