@extends('frontend.main')
@section('title', '')

@section('styles')
@endsection

@push('css')
@endpush



@section('content')
    <div class="banner">
        <div class="border"> </div>
        <h2>The Darjeeling Limited</h2>
        <p>by Wes Anderson</span></p>
        <div class="border border-bottom"> </div>
    </div>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="">
                        <div class="card">
                            <div class="chip">
                              <!-- Tooth icon  -->
                              <svg class="tooth" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.804 13.9809C8.81319 10.6713 7.87957 8.89105 7.5 8.89105C7.12043 8.89105 6.196 10.6713 6.196 13.9748C6.196 14.2623 6.07662 14.5315 5.8654 14.7212C5.51951 15.0301 4.97464 15.0699 4.58589 14.8068C2.79824 13.5986 1.27384 11.3748 0.514701 8.86352C-0.293414 6.19011 -0.143423 3.5687 0.918759 1.85576C1.53709 0.858586 2.42173 0.234587 3.47779 0.0541162C4.3257 -0.0896484 5.23483 0.0602338 6.1409 0.500704C6.97962 0.907527 8.02038 0.907527 8.86216 0.500704C9.76517 0.0602338 10.6774 -0.0927072 11.5222 0.0541162C12.5783 0.234587 13.4629 0.858586 14.0812 1.85576C15.1434 3.57176 15.2934 6.19011 14.4853 8.86352C13.7262 11.3748 12.2048 13.6016 10.4141 14.8068C9.84782 15.1892 8.80094 15.0485 8.804 13.9809ZM3.689 1.28376C2.98802 1.41835 2.41255 1.816 1.984 2.51341C1.11773 3.90517 1.01671 6.20235 1.71157 8.50258C2.34214 10.5856 3.53901 12.4332 4.95321 13.5313C5.02974 10.6101 5.83173 7.64305 7.5 7.64305C9.16827 7.64305 9.97332 10.6162 10.0468 13.5313C11.461 12.4332 12.6579 10.5856 13.2884 8.50258C13.9833 6.20235 13.8823 3.90517 13.0191 2.51341C12.5875 1.81906 12.015 1.40612 11.3141 1.28376C10.7233 1.18282 10.0743 1.29906 9.40703 1.62329C8.22853 2.19223 6.77453 2.19223 5.59603 1.62329C5.08178 1.37553 4.17571 1.18894 3.689 1.28376Z" fill="#477EF9"/>
                              </svg>
                              <p>Dental</p>
                            </div>
                            <h3>Link Shortner</h3>
                            <button>View More</button>
                            <div class="accent-line"></div>
                          </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection


@section('scripts')
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
@endsection

@push('js')
@endpush
