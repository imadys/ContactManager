
            @if(session()->has('danger'))
            <div class="card mb-4 py-3 border-left-danger">
                <div class="card-body">
                  <p>{{ session('danger') }}</p>
                </div>
              </div>
            @elseif(session()->has('success'))

            <div class="card mb-4 py-3 border-left-success">
                <div class="card-body">
                  <p>{{ session('success') }}</p>
                </div>
              </div>
            @elseif(session()->has('warning'))
            <div class="card mb-4 py-3 border-left-warning">
                <div class="card-body">
                  <p>{{ session('warning') }}</p>
                </div>
              </div>
            @endif
