<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
<section class="py-5 text-center container">
    <div class="row py-lg-5 bg-light">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Clientside Image Preview</h1>
            <p class="lead text-muted">
                If you've ever wanted to have a clientside image preview 
                to help users see what they selected for upload.
            </p>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="p-4 border border-secondary">
                <h2 class="border-bottom pb-3 mb-4">Avatar Preview</h2>
                <div class="text-center">
                    <img id="image-preview" 
                         src="{{asset('assets/images/default.png')}}"
                         style="width:400px"
                         class="rounded rounded-circle" alt="placeholder">
                </div>
            </div>

            <form>
                    <input type="file" name="image" class="form-control" accept="image/*"
                           onchange="updatePreview(this, 'image-preview')" >
                    <div class="text-end">
                        <button class="btn btn-primary mt-3 ">Upload</button>
                    </div>
                </form>

        </div>

    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<script type="text/javascript">
    function updatePreview(input, target) {
        let file = input.files[0];
        let reader = new FileReader();
        
        reader.readAsDataURL(file);
        reader.onload = function () {
            let img = document.getElementById(target);
            // can also use "this.result"
            img.src = reader.result;
        }
    }
</script>
</body>
</html>