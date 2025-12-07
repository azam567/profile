<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $project['title'] }}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container py-5">
    <div class="card mx-auto shadow-lg" style="max-width: 800px; border-radius: 15px; overflow: hidden;">

      <!-- Bootstrap Carousel -->
      <div id="projectCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          @foreach ($project['images'] as $index => $image)
          <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
            <img src="{{ asset($image) }}" class="d-block w-100" alt="{{ $project['title'] }}" style="height: 400px; object-fit: cover;">
          </div>
          @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#projectCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#projectCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="card-body">
        <h2 class="card-title mb-3">{{ $project['title'] }}</h2>
        <p class="card-text">{{ $project['description'] }}</p>
        <a href="{{ url()->previous() }}" class="btn btn-primary mt-3">⬅ Back to Portfolio</a>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
