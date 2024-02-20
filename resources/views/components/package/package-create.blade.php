<div class="container mt-4">
    <h2>Create Package</h2>
    <form id="packageForm">
        <div class="form-group">
            <label for="packageName">Package Name:</label>
            <input type="text" class="form-control" id="packageName" required>
        </div>
        <div class="form-group">
            <label for="packageDescription">Package Description:</label>
            <textarea class="form-control" id="packageDescription" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="packagePrice">Package Price:</label>
            <input type="number" class="form-control" id="packagePrice" required>
        </div>
        <button type="button" class="btn btn-primary" onclick="createPackage()">Create Package</button>
    </form>

    <hr>

    <h2>Package List</h2>
    <div id="packageList"></div>
</div>