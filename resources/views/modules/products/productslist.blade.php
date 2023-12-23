@extends('commonMaster')
@section('pageContent')
    <div class="py-5">
        <div class="row">
            <div class="col-md-8">
                <div>
                    <img src="{{ asset('images/all-images/Group307.png') }}" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-4">
                    <img src="{{ asset('images/all-images/Group309.png') }}" class="img-fluid" alt="">
                </div>
                <div>
                    <img src="{{ asset('images/all-images/Group309.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>

        <div class="productsListingSec rounded-4 p-5 my-5">
            <div class="row">
                <div class="col-md-12 pb-4">
                    <div class="">
                        <h4 class="text-dark fw-bold ">Product List</h4>
                    </div>
                    <div class="mt-3">
                        <p class="fs-13 text-muted">Viewing <b>20</b> of <b>160</b> product</p>
                    </div>
                </div>
            </div>

            <div class="productsCards">
                <div class="row row-cols-2 row-cols-md-4 g-4 mb-4">
                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <img src="{{ asset('images/all-images/product-1.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body pt-0 text-center">
                                <h5 class="card-title fw-bold fs-14"><a href="{{ url('product-details') }}"
                                        class="text-dark productTitle">AirPods Pro</a></h5>
                                <h6 class="productprice fw-bold">${{ mt_rand(999, 10000) }}.00</h6>
                                <p class="mb-0 fs-12 fw-bold text-muted">Sold {{ mt_rand(1, 100) }}</p>
                            </div>
                            <div class="pb-4 card-footer text-center">
                                <button class="btn rounded-5 bttn_color fs-12 fw-bold px-5">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <img src="{{ asset('images/all-images/product-0.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body pt-0 text-center">
                                <h5 class="card-title fw-bold fs-14"><a href="{{ url('product-details') }}"
                                        class="text-dark productTitle">iPhone 13 case</a></h5>
                                <h6 class="productprice fw-bold">${{ mt_rand(999, 10000) }}.00</h6>
                                <p class="mb-0 fs-12 fw-bold text-muted">Sold {{ mt_rand(1, 100) }}</p>
                            </div>
                            <div class="pb-4 card-footer text-center">
                                <button class="btn rounded-5 bttn_color fs-12 fw-bold px-5">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <img src="{{ asset('images/all-images/product-2.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body pt-0 text-center">
                                <h5 class="card-title fw-bold fs-14"><a href="{{ url('product-details') }}"
                                        class="text-dark productTitle">USB C Cable</a></h5>
                                <h6 class="productprice fw-bold">${{ mt_rand(100, 1000) }}.00</h6>
                                <p class="mb-0 fs-12 fw-bold text-muted">Sold {{ mt_rand(1, 100) }}</p>
                            </div>
                            <div class="pb-4 card-footer text-center">
                                <button class="btn rounded-5 bttn_color fs-12 fw-bold px-5">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <img src="{{ asset('images/all-images/product-1.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body pt-0 text-center">
                                <h5 class="card-title fw-bold fs-14"><a href="{{ url('product-details') }}"
                                        class="text-dark productTitle">AirPods Pro</a></h5>
                                <h6 class="productprice fw-bold">${{ mt_rand(999, 10000) }}.00</h6>
                                <p class="mb-0 fs-12 fw-bold text-muted">Sold {{ mt_rand(1, 100) }}</p>
                            </div>
                            <div class="pb-4 card-footer text-center">
                                <button class="btn rounded-5 bttn_color fs-12 fw-bold px-5">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row row-cols-2 row-cols-md-4 g-4 mb-4">
                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <img src="{{ asset('images/all-images/product-1.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body pt-0 text-center">
                                <h5 class="card-title fw-bold fs-14"><a href="{{ url('product-details') }}"
                                        class="text-dark productTitle">AirPods Pro</a></h5>
                                <h6 class="productprice fw-bold">${{ mt_rand(999, 10000) }}.00</h6>
                                <p class="mb-0 fs-12 fw-bold text-muted">Sold {{ mt_rand(1, 100) }}</p>
                            </div>
                            <div class="pb-4 card-footer text-center">
                                <button class="btn rounded-5 bttn_color fs-12 fw-bold px-5">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <img src="{{ asset('images/all-images/product-0.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body pt-0 text-center">
                                <h5 class="card-title fw-bold fs-14"><a href="{{ url('product-details') }}"
                                        class="text-dark productTitle">iPhone 13 case</a></h5>
                                <h6 class="productprice fw-bold">${{ mt_rand(999, 10000) }}.00</h6>
                                <p class="mb-0 fs-12 fw-bold text-muted">Sold {{ mt_rand(1, 100) }}</p>
                            </div>
                            <div class="pb-4 card-footer text-center">
                                <button class="btn rounded-5 bttn_color fs-12 fw-bold px-5">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <img src="{{ asset('images/all-images/product-2.jpg') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body pt-0 text-center">
                                <h5 class="card-title fw-bold fs-14"><a href="{{ url('product-details') }}"
                                        class="text-dark productTitle">USB C Cable</a></h5>
                                <h6 class="productprice fw-bold">${{ mt_rand(100, 1000) }}.00</h6>
                                <p class="mb-0 fs-12 fw-bold text-muted">Sold {{ mt_rand(1, 100) }}</p>
                            </div>
                            <div class="pb-4 card-footer text-center">
                                <button class="btn rounded-5 bttn_color fs-12 fw-bold px-5">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <img src="{{ asset('images/all-images/product-1.jpg') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body pt-0 text-center">
                                <h5 class="card-title fw-bold fs-14"><a href="{{ url('product-details') }}"
                                        class="text-dark productTitle">AirPods Pro</a></h5>
                                <h6 class="productprice fw-bold">${{ mt_rand(999, 10000) }}.00</h6>
                                <p class="mb-0 fs-12 fw-bold text-muted">Sold {{ mt_rand(1, 100) }}</p>
                            </div>
                            <div class="pb-4 card-footer text-center">
                                <button class="btn rounded-5 bttn_color fs-12 fw-bold px-5">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row row-cols-2 row-cols-md-4 g-4 mb-4">
                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <img src="{{ asset('images/all-images/product-1.jpg') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body pt-0 text-center">
                                <h5 class="card-title fw-bold fs-14"><a href="{{ url('product-details') }}"
                                        class="text-dark productTitle">AirPods Pro</a></h5>
                                <h6 class="productprice fw-bold">${{ mt_rand(999, 10000) }}.00</h6>
                                <p class="mb-0 fs-12 fw-bold text-muted">Sold {{ mt_rand(1, 100) }}</p>
                            </div>
                            <div class="pb-4 card-footer text-center">
                                <button class="btn rounded-5 bttn_color fs-12 fw-bold px-5">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <img src="{{ asset('images/all-images/product-0.jpg') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body pt-0 text-center">
                                <h5 class="card-title fw-bold fs-14"><a href="{{ url('product-details') }}"
                                        class="text-dark productTitle">iPhone 13 case</a></h5>
                                <h6 class="productprice fw-bold">${{ mt_rand(999, 10000) }}.00</h6>
                                <p class="mb-0 fs-12 fw-bold text-muted">Sold {{ mt_rand(1, 100) }}</p>
                            </div>
                            <div class="pb-4 card-footer text-center">
                                <button class="btn rounded-5 bttn_color fs-12 fw-bold px-5">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <img src="{{ asset('images/all-images/product-2.jpg') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body pt-0 text-center">
                                <h5 class="card-title fw-bold fs-14"><a href="{{ url('product-details') }}"
                                        class="text-dark productTitle">USB C Cable</a></h5>
                                <h6 class="productprice fw-bold">${{ mt_rand(100, 1000) }}.00</h6>
                                <p class="mb-0 fs-12 fw-bold text-muted">Sold {{ mt_rand(1, 100) }}</p>
                            </div>
                            <div class="pb-4 card-footer text-center">
                                <button class="btn rounded-5 bttn_color fs-12 fw-bold px-5">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <img src="{{ asset('images/all-images/product-1.jpg') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body pt-0 text-center">
                                <h5 class="card-title fw-bold fs-14"><a href="{{ url('product-details') }}"
                                        class="text-dark productTitle">AirPods Pro</a></h5>
                                <h6 class="productprice fw-bold">${{ mt_rand(999, 10000) }}.00</h6>
                                <p class="mb-0 fs-12 fw-bold text-muted">Sold {{ mt_rand(1, 100) }}</p>
                            </div>
                            <div class="pb-4 card-footer text-center">
                                <button class="btn rounded-5 bttn_color fs-12 fw-bold px-5">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row row-cols-2 row-cols-md-4 g-4 mb-4">
                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <img src="{{ asset('images/all-images/product-1.jpg') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body pt-0 text-center">
                                <h5 class="card-title fw-bold fs-14"><a href="{{ url('product-details') }}"
                                        class="text-dark productTitle">AirPods Pro</a></h5>
                                <h6 class="productprice fw-bold">${{ mt_rand(999, 10000) }}.00</h6>
                                <p class="mb-0 fs-12 fw-bold text-muted">Sold {{ mt_rand(1, 100) }}</p>
                            </div>
                            <div class="pb-4 card-footer text-center">
                                <button class="btn rounded-5 bttn_color fs-12 fw-bold px-5">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <img src="{{ asset('images/all-images/product-0.jpg') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body pt-0 text-center">
                                <h5 class="card-title fw-bold fs-14"><a href="{{ url('product-details') }}"
                                        class="text-dark productTitle">iPhone 13 case</a></h5>
                                <h6 class="productprice fw-bold">${{ mt_rand(999, 10000) }}.00</h6>
                                <p class="mb-0 fs-12 fw-bold text-muted">Sold {{ mt_rand(1, 100) }}</p>
                            </div>
                            <div class="pb-4 card-footer text-center">
                                <button class="btn rounded-5 bttn_color fs-12 fw-bold px-5">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <img src="{{ asset('images/all-images/product-2.jpg') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body pt-0 text-center">
                                <h5 class="card-title fw-bold fs-14"><a href="{{ url('product-details') }}"
                                        class="text-dark productTitle">USB C Cable</a></h5>
                                <h6 class="productprice fw-bold">${{ mt_rand(100, 1000) }}.00</h6>
                                <p class="mb-0 fs-12 fw-bold text-muted">Sold {{ mt_rand(1, 100) }}</p>
                            </div>
                            <div class="pb-4 card-footer text-center">
                                <button class="btn rounded-5 bttn_color fs-12 fw-bold px-5">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <img src="{{ asset('images/all-images/product-1.jpg') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body pt-0 text-center">
                                <h5 class="card-title fw-bold fs-14"><a href="{{ url('product-details') }}"
                                        class="text-dark productTitle">AirPods Pro</a></h5>
                                <h6 class="productprice fw-bold">${{ mt_rand(999, 10000) }}.00</h6>
                                <p class="mb-0 fs-12 fw-bold text-muted">Sold {{ mt_rand(1, 100) }}</p>
                            </div>
                            <div class="pb-4 card-footer text-center">
                                <button class="btn rounded-5 bttn_color fs-12 fw-bold px-5">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row row-cols-2 row-cols-md-4 g-4 mb-4">
                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <img src="{{ asset('images/all-images/product-1.jpg') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body pt-0 text-center">
                                <h5 class="card-title fw-bold fs-14"><a href="{{ url('product-details') }}"
                                        class="text-dark productTitle">AirPods Pro</a></h5>
                                <h6 class="productprice fw-bold">${{ mt_rand(999, 10000) }}.00</h6>
                                <p class="mb-0 fs-12 fw-bold text-muted">Sold {{ mt_rand(1, 100) }}</p>
                            </div>
                            <div class="pb-4 card-footer text-center">
                                <button class="btn rounded-5 bttn_color fs-12 fw-bold px-5">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <img src="{{ asset('images/all-images/product-0.jpg') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body pt-0 text-center">
                                <h5 class="card-title fw-bold fs-14"><a href="{{ url('product-details') }}"
                                        class="text-dark productTitle">iPhone 13 case</a></h5>
                                <h6 class="productprice fw-bold">${{ mt_rand(999, 10000) }}.00</h6>
                                <p class="mb-0 fs-12 fw-bold text-muted">Sold {{ mt_rand(1, 100) }}</p>
                            </div>
                            <div class="pb-4 card-footer text-center">
                                <button class="btn rounded-5 bttn_color fs-12 fw-bold px-5">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <img src="{{ asset('images/all-images/product-2.jpg') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body pt-0 text-center">
                                <h5 class="card-title fw-bold fs-14"><a href="{{ url('product-details') }}"
                                        class="text-dark productTitle">USB C Cable</a></h5>
                                <h6 class="productprice fw-bold">${{ mt_rand(100, 1000) }}.00</h6>
                                <p class="mb-0 fs-12 fw-bold text-muted">Sold {{ mt_rand(1, 100) }}</p>
                            </div>
                            <div class="pb-4 card-footer text-center">
                                <button class="btn rounded-5 bttn_color fs-12 fw-bold px-5">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <img src="{{ asset('images/all-images/product-1.jpg') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body pt-0 text-center">
                                <h5 class="card-title fw-bold fs-14"><a href="{{ url('product-details') }}"
                                        class="text-dark productTitle">AirPods Pro</a></h5>
                                <h6 class="productprice fw-bold">${{ mt_rand(999, 10000) }}.00</h6>
                                <p class="mb-0 fs-12 fw-bold text-muted">Sold {{ mt_rand(1, 100) }}</p>
                            </div>
                            <div class="pb-4 card-footer text-center">
                                <button class="btn rounded-5 bttn_color fs-12 fw-bold px-5">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row row-cols-2 row-cols-md-4 g-4 mb-4">
                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <img src="{{ asset('images/all-images/product-1.jpg') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body pt-0 text-center">
                                <h5 class="card-title fw-bold fs-14"><a href="{{ url('product-details') }}"
                                        class="text-dark productTitle">AirPods Pro</a></h5>
                                <h6 class="productprice fw-bold">${{ mt_rand(999, 10000) }}.00</h6>
                                <p class="mb-0 fs-12 fw-bold text-muted">Sold {{ mt_rand(1, 100) }}</p>
                            </div>
                            <div class="pb-4 card-footer text-center">
                                <button class="btn rounded-5 bttn_color fs-12 fw-bold px-5">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <img src="{{ asset('images/all-images/product-0.jpg') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body pt-0 text-center">
                                <h5 class="card-title fw-bold fs-14"><a href="{{ url('product-details') }}"
                                        class="text-dark productTitle">iPhone 13 case</a></h5>
                                <h6 class="productprice fw-bold">${{ mt_rand(999, 10000) }}.00</h6>
                                <p class="mb-0 fs-12 fw-bold text-muted">Sold {{ mt_rand(1, 100) }}</p>
                            </div>
                            <div class="pb-4 card-footer text-center">
                                <button class="btn rounded-5 bttn_color fs-12 fw-bold px-5">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <img src="{{ asset('images/all-images/product-2.jpg') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body pt-0 text-center">
                                <h5 class="card-title fw-bold fs-14"><a href="{{ url('product-details') }}"
                                        class="text-dark productTitle">USB C Cable</a></h5>
                                <h6 class="productprice fw-bold">${{ mt_rand(100, 1000) }}.00</h6>
                                <p class="mb-0 fs-12 fw-bold text-muted">Sold {{ mt_rand(1, 100) }}</p>
                            </div>
                            <div class="pb-4 card-footer text-center">
                                <button class="btn rounded-5 bttn_color fs-12 fw-bold px-5">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <img src="{{ asset('images/all-images/product-1.jpg') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body pt-0 text-center">
                                <h5 class="card-title fw-bold fs-14"><a href="{{ url('product-details') }}"
                                        class="text-dark productTitle">AirPods Pro</a></h5>
                                <h6 class="productprice fw-bold">${{ mt_rand(999, 10000) }}.00</h6>
                                <p class="mb-0 fs-12 fw-bold text-muted">Sold {{ mt_rand(1, 100) }}</p>
                            </div>
                            <div class="pb-4 card-footer text-center">
                                <button class="btn rounded-5 bttn_color fs-12 fw-bold px-5">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row row-cols-2 row-cols-md-4 g-4 mb-4">
                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <img src="{{ asset('images/all-images/product-1.jpg') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body pt-0 text-center">
                                <h5 class="card-title fw-bold fs-14"><a href="{{ url('product-details') }}"
                                        class="text-dark productTitle">AirPods Pro</a></h5>
                                <h6 class="productprice fw-bold">${{ mt_rand(999, 10000) }}.00</h6>
                                <p class="mb-0 fs-12 fw-bold text-muted">Sold {{ mt_rand(1, 100) }}</p>
                            </div>
                            <div class="pb-4 card-footer text-center">
                                <button class="btn rounded-5 bttn_color fs-12 fw-bold px-5">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <img src="{{ asset('images/all-images/product-0.jpg') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body pt-0 text-center">
                                <h5 class="card-title fw-bold fs-14"><a href="{{ url('product-details') }}"
                                        class="text-dark productTitle">iPhone 13 case</a></h5>
                                <h6 class="productprice fw-bold">${{ mt_rand(999, 10000) }}.00</h6>
                                <p class="mb-0 fs-12 fw-bold text-muted">Sold {{ mt_rand(1, 100) }}</p>
                            </div>
                            <div class="pb-4 card-footer text-center">
                                <button class="btn rounded-5 bttn_color fs-12 fw-bold px-5">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <img src="{{ asset('images/all-images/product-2.jpg') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body pt-0 text-center">
                                <h5 class="card-title fw-bold fs-14"><a href="{{ url('product-details') }}"
                                        class="text-dark productTitle">USB C Cable</a></h5>
                                <h6 class="productprice fw-bold">${{ mt_rand(100, 1000) }}.00</h6>
                                <p class="mb-0 fs-12 fw-bold text-muted">Sold {{ mt_rand(1, 100) }}</p>
                            </div>
                            <div class="pb-4 card-footer text-center">
                                <button class="btn rounded-5 bttn_color fs-12 fw-bold px-5">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <img src="{{ asset('images/all-images/product-1.jpg') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body pt-0 text-center">
                                <h5 class="card-title fw-bold fs-14"><a href="{{ url('product-details') }}"
                                        class="text-dark productTitle">AirPods Pro</a></h5>
                                <h6 class="productprice fw-bold">${{ mt_rand(999, 10000) }}.00</h6>
                                <p class="mb-0 fs-12 fw-bold text-muted">Sold {{ mt_rand(1, 100) }}</p>
                            </div>
                            <div class="pb-4 card-footer text-center">
                                <button class="btn rounded-5 bttn_color fs-12 fw-bold px-5">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="productsListingPagination py-4">
               <div class="text-center">
                  <div>
                        <div class="d-flex justify-content-center">
                           <span class=" rounded-3"><a href="" class="">1</a></span>
                           <span class=" rounded-3"><a href="" class="">2</a></span>
                           <span class=" rounded-3"><a href="" class="">3</a></span>
                           <span class=" rounded-3">></span>
                        </div>
                  </div>
               </div>
            </div>
        </div>



    </div>
@endsection
