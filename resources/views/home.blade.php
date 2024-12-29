@extends('layouts.app')

@section('content')
    <div class="row">
        <!-- Number of Items Going Out -->
        <div class="col-xl-3 col-xxl-6 col-sm-6">
            <div class="card">
                <div class="card-body d-flex">
                    <div class="icon me-3">
                        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="30" cy="30" r="30" fill="white" />
                            <path
                                d="M30 0C13.4312 0 0 13.4312 0 30C0 46.5688 13.4312 60 30 60C46.5688 60 60 46.5688 60 30C60 13.4312 46.5688 0 30 0ZM30 54.375C16.5588 54.375 5.625 43.44 5.625 30C5.625 16.56 16.5588 5.625 30 5.625C43.4412 5.625 54.375 16.5588 54.375 30C54.375 43.4412 43.44 54.375 30 54.375Z"
                                fill="#F7931A" />
                            <path
                                d="M31.5488 30.9737H27.61V36.825H31.5488C32.3438 36.825 33.0813 36.5025 33.5988 35.9612C34.14 35.4425 34.4625 34.7062 34.4625 33.8875C34.4638 32.2862 33.15 30.9737 31.5488 30.9737Z"
                                fill="#F7931A" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="invoice-num">150</h2>
                        <p class="mb-0 invoice-num1">
                            <svg width="21" height="14" viewBox="0 0 21 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 13C1.91797 11.9157 4.89728 8.72772 6.5 7L12.5 10L19.5 1" stroke="#13B440"
                                    stroke-width="2" stroke-linecap="round" />
                            </svg>
                            <span class="text-success me-1">45%</span> This week
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Number of Items Coming In -->
        <div class="col-xl-3 col-xxl-6 col-sm-6">
            <div class="card">
                <div class="card-body d-flex">
                    <div class="icon me-3">
                        <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="30" cy="30" r="30" fill="white" />
                            <path
                                d="M30.5438 0.00514091C13.9681 -0.294871 0.305031 12.8932 0.00501883 29.4563C-0.294993 46.0195 12.893 59.6951 29.4562 59.9951C46.0194 60.2951 59.695 47.1071 59.995 30.5314C60.295 13.9682 47.1069 0.292653 30.5438 0.00514091ZM29.5562 54.3699C16.1182 54.1198 5.38024 42.9944 5.63025 29.5563C5.86776 16.1183 16.9932 5.38036 30.4313 5.61787C43.8818 5.86788 54.6072 16.9933 54.3697 30.4314C54.1322 43.8694 42.9943 54.6074 29.5562 54.3699Z"
                                fill="#FF6600" />
                            <path
                                d="M30.3938 8.11797C18.3308 7.90546 8.34286 17.5434 8.13035 29.6063C8.0591 33.4015 8.97038 36.9904 10.623 40.1355H17.4995V18.6021C17.4995 17.2858 19.2883 16.8671 19.8696 18.0484L30 38.563L40.1304 18.0496C40.7117 16.8671 42.5005 17.2858 42.5005 18.6021V40.1355H49.3558C50.8933 37.2129 51.8084 33.9128 51.8696 30.3939C52.0821 18.3309 42.4567 8.34298 30.3938 8.11797Z"
                                fill="#FF6600" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="invoice-num">120</h2>
                        <p class="mb-0">
                            <svg width="21" height="14" viewBox="0 0 21 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 13C1.91797 11.9157 4.89728 8.72772 6.5 7L12.5 10L19.5 1" stroke="#13B440"
                                    stroke-width="2" stroke-linecap="round" />
                            </svg>
                            <span class="text-success me-1">45%</span> This week
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Number of Stock Items -->
        <div class="col-xl-3 col-xxl-6 col-sm-6">
            <div class="card">
                <div class="card-body d-flex">
                    <div class="icon me-3">
                        <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="30" cy="30" r="30" fill="white" />
                            <path
                                d="M30.5438 0.00501883C13.9681 -0.294993 0.305031 12.893 0.00501883 29.4562C-0.294993 46.0194 12.893 59.695 29.4562 59.995C46.0194 60.295 59.695 47.1069 59.995 30.5313C60.295 13.9681 47.1069 0.292531 30.5438 0.00501883ZM29.5562 54.3697C16.1182 54.1197 5.38024 42.9943 5.63025 29.5562C5.86776 16.1182 16.9932 5.38024 30.4313 5.61775C43.8818 5.86776 54.6072 16.9932 54.3697 30.4313C54.1322 43.8693 42.9943 54.6072 29.5562 54.3697Z"
                                fill="#627EEA" />
                            <path
                                d="M30.3963 8.12285C18.3333 7.91034 8.34536 17.5482 8.13285 29.6112C7.90784 41.6617 17.5457 51.6496 29.6087 51.8746C41.6717 52.0871 51.6596 42.4492 51.8721 30.3988C52.0846 18.3358 42.4592 8.34786 30.3963 8.12285ZM39.4091 42.6993H19.5083L21.9459 29.2112L19.1208 29.7987V27.4986L22.3709 26.8111L24.4835 15.2106H32.4213L30.6213 25.086L33.3964 25.6726L33.3639 28.1748L29.7587 30.2955C30.7425 33.1542 31.9537 35.6839 33.3639 37.4233L39.4091 42.6993Z"
                                fill="#627EEA" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="invoice-num">200</h2>
                        <p class="mb-0">
                            <svg width="21" height="14" viewBox="0 0 21 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 13C1.91797 11.9157 4.89728 8.72772 6.5 7L12.5 10L19.5 1" stroke="#FF6600"
                                    stroke-width="2" stroke-linecap="round" />
                            </svg>
                            <span class="text-danger me-1">10%</span> Decrease this month
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Number of Item Types -->
        <div class="col-xl-3 col-xxl-6 col-sm-6">
            <div class="card">
                <div class="card-body d-flex">
                    <div class="icon me-3">
                        <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="30" cy="30" r="30" fill="white" />
                            <path
                                d="M30 0C13.4312 0 0 13.4312 0 30C0 46.5688 13.4312 60 30 60C46.5688 60 60 46.5688 60 30C60 13.4312 46.5688 0 30 0ZM30 54.375C16.5588 54.375 5.625 43.44 5.625 30C5.625 16.56 16.5588 5.625 30 5.625C43.4412 5.625 54.375 16.5588 54.375 30C54.375 43.4412 43.44 54.375 30 54.375Z"
                                fill="#DCDCDC" />
                            <path d="M28.125 17.5L22.5 30L28.125 42.5" stroke="#808080" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="invoice-num">5</h2>
                        <p class="mb-0">
                            <svg width="21" height="14" viewBox="0 0 21 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 13C1.91797 11.9157 4.89728 8.72772 6.5 7L12.5 10L19.5 1" stroke="#13B440"
                                    stroke-width="2" stroke-linecap="round" />
                            </svg>
                            <span class="text-success me-1">25%</span> Increase this month
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
