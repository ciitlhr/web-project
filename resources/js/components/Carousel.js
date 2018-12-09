import React from 'react'

const Carousel = () =>(
    <div id="carouselExampleIndicators" className="carousel slide" data-ride="carousel">
                
                <div className="carousel-inner">
                  <div className="carousel-item active">
                    <img className="d-block w-100 img-responsive" src="images/bloggingimage2.jpg" alt="First slide" width="100%" height="700px"></img>
                  </div>
                  <div className="carousel-item">
                    <img className="d-block w-100 img-responsive" src="images/blogging2.jpg" alt="Second slide" width="100%" height="700px"></img>
                  </div>
                </div>
                <a className="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span className="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span className="sr-only">Previous</span>
                </a>
                <a className="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span className="carousel-control-next-icon" aria-hidden="true"></span>
                  <span className="sr-only">Next</span>
                </a>
              </div>
)

export default Carousel