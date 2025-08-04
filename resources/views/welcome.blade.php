@extends('layouts.main')

@section('content')
<!-- STORY -->
<div class="author-notification mb-4">
    <div class="swiper-btn-center-lr my-0">
       <div class="swiper-container categorie-swiper">
          <div class="swiper-wrapper">
             <div class="swiper-slide">
                <a href="" class="categore-box">
                   <div class="container text-center">
                      <div class="row">
                         <div class="col story-bx mx-1">
                            <img src="https://api.ceritain.com//sticker/Mental Health Struggle.png" alt="/" />
                         </div>
                         <div class="col story-bx mx-1">
                            <img src="https://api.ceritain.com//sticker/Relationship drama.png" alt="/" />
                         </div>
                         <div class="col story-bx mx-1">
                            <img src="https://api.ceritain.com//sticker/Eco Anixty.png" alt="/" />
                         </div>
                         <div class="col story-bx mx-1">
                            <img src="https://api.ceritain.com//sticker/Crisis identitas.png" alt="/" />
                         </div>
                         <div class="col story-bx mx-1">
                            <img src="https://api.ceritain.com//sticker/Selfcare fisik.png" alt="/" />
                         </div>
                      </div>
                   </div>
                   <div class="container text-center container1">
                      <div class="row">
                         <div class="col">
                            <span class="detail">Mental Health Struggle</span>
                         </div>
                         <div class="col">
                            <span class="detail">Relationship Drama</span>
                         </div>
                         <div class="col">
                            <span class="detail">Eco Anxiety</span>
                         </div>
                         <div class="col">
                            <span class="detail">Crisis Identitas</span>
                         </div>
                         <div class="col">
                            <span class="detail">Self-Care Fisik</span>
                         </div>
                      </div>
                   </div>
                </a>
             </div>
          </div>
       </div>
    </div>
</div>
 <!-- STORY -->
<div class="post-area">
    <div *ngFor="let story of stories" class="post-card">
       <div class="container" >
          <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img 
                        src="https://images.deepai.org/art-image/b66f4cd4e9b34fb9bebcab2df3ed7dd2/mothers-collect-trash-plastics-papers-and-use_Af4Iels.jpg" 
                        class="d-block mx-auto rounded-top-2"
                        alt="/" 
                    />
                    <div class="card-body">
                        <h5 class="card-title">Mental Health Struggle</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta fugiat, laborum aperiam eveniet impedit at voluptate laudantium. Rem distinctio, iusto, explicabo voluptatum magnam similique eos beatae numquam, omnis in reprehenderit.</p>
                        <div class="d-flex justify-content-end">
                            <a href="" class="btn btn-sm btn-outline-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img 
                        src="https://images.deepai.org/art-image/b66f4cd4e9b34fb9bebcab2df3ed7dd2/mothers-collect-trash-plastics-papers-and-use_Af4Iels.jpg" 
                        class="d-block mx-auto rounded-top-2"
                        alt="/" 
                    />
                    <div class="card-body">
                        <h5 class="card-title">Mental Health Struggle</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta fugiat, laborum aperiam eveniet impedit at voluptate laudantium. Rem distinctio, iusto, explicabo voluptatum magnam similique eos beatae numquam, omnis in reprehenderit.</p>
                        <div class="d-flex justify-content-end">
                            <a href="" class="btn btn-sm btn-outline-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img 
                        src="https://images.deepai.org/art-image/b66f4cd4e9b34fb9bebcab2df3ed7dd2/mothers-collect-trash-plastics-papers-and-use_Af4Iels.jpg" 
                        class="d-block mx-auto rounded-top-2"
                        alt="/" 
                    />
                    <div class="card-body">
                        <h5 class="card-title">Mental Health Struggle</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta fugiat, laborum aperiam eveniet impedit at voluptate laudantium. Rem distinctio, iusto, explicabo voluptatum magnam similique eos beatae numquam, omnis in reprehenderit.</p>
                        <div class="d-flex justify-content-end">
                            <a href="" class="btn btn-sm btn-outline-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img 
                        src="https://images.deepai.org/art-image/b66f4cd4e9b34fb9bebcab2df3ed7dd2/mothers-collect-trash-plastics-papers-and-use_Af4Iels.jpg" 
                        class="d-block mx-auto rounded-top-2"
                        alt="/" 
                    />
                    <div class="card-body">
                        <h5 class="card-title">Mental Health Struggle</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta fugiat, laborum aperiam eveniet impedit at voluptate laudantium. Rem distinctio, iusto, explicabo voluptatum magnam similique eos beatae numquam, omnis in reprehenderit.</p>
                        <div class="d-flex justify-content-end">
                            <a href="" class="btn btn-sm btn-outline-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img 
                        src="https://images.deepai.org/art-image/b66f4cd4e9b34fb9bebcab2df3ed7dd2/mothers-collect-trash-plastics-papers-and-use_Af4Iels.jpg" 
                        class="d-block mx-auto rounded-top-2"
                        alt="/" 
                    />
                    <div class="card-body">
                        <h5 class="card-title">Mental Health Struggle</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta fugiat, laborum aperiam eveniet impedit at voluptate laudantium. Rem distinctio, iusto, explicabo voluptatum magnam similique eos beatae numquam, omnis in reprehenderit.</p>
                        <div class="d-flex justify-content-end">
                            <a href="" class="btn btn-sm btn-outline-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img 
                        src="https://images.deepai.org/art-image/b66f4cd4e9b34fb9bebcab2df3ed7dd2/mothers-collect-trash-plastics-papers-and-use_Af4Iels.jpg" 
                        class="d-block mx-auto rounded-top-2"
                        alt="/" 
                    />
                    <div class="card-body">
                        <h5 class="card-title">Mental Health Struggle</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta fugiat, laborum aperiam eveniet impedit at voluptate laudantium. Rem distinctio, iusto, explicabo voluptatum magnam similique eos beatae numquam, omnis in reprehenderit.</p>
                        <div class="d-flex justify-content-end">
                            <a href="" class="btn btn-sm btn-outline-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
          </div>
       </div>
    </div>
</div>
@endsection