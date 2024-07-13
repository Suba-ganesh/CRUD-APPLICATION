<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudentApplication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
            <div class="card" style="width: 50rem;">
                  <div class="card-header">
                        STUDENT APPLICATION
                            </div>
                            <div class="card-body">
                            <form method="post" action="add1.php">
                            <div class="mb-3">
                            <label class="form-label">NAME:</label>
                            <input type="text" class="form-control" name="name">
    
                             <div class="mb-3">
                            <label class="form-label">DEPARTMENT:</label>
                            <input type="text" class="form-control" name="department">
                            </div>
                            <div class="mb-3">
                            <label class="form-label">MOBILE:</label>
                            <input type="text" class="form-control" name="mobile">
                            </div>
                            <button type="submit" value="submit" class="btn btn-primary">Submit</button>
                            </form>
                                
    </div>
                        
</div>
            </div>
        </div>
    </div>
</body>
</html>