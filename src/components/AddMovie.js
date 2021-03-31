import React from "react";
import serialize from "form-serialize"

class AddMovie extends React.Component {
    handleFormSubmit=(e)=>{
        e.preventDefault();
       
        const newMoviee=serialize(e.target.value,{hash:true});
        console.log(newMoviee);
    }
    render() {
        return (
            <div className="row">
                <form onSubmit={this.handleFormSubmit}>
                    <div>
                        Add Movie
                    </div>
                    <div className="col-lg-6 mb-2">
                        <input type="text" name="name" placeholder="Name" className="form-control" />
                    </div>
                    <div className="col-lg-6 mb-2">
                        <input type="text" name="rating" placeholder="Rating" className="form-control" />
                    </div>
                    <div className="col-lg-6 mb-2">
                        <input type="text" name="imageURL" placeholder="Image URL" className="form-control" />
                    </div>
                    <div className="col-lg-6 mb-2">
                        <input type="text" name="overview" placeholder="Overview" className="form-control" />
                    </div>
                    <input className="btn btn-danger" type="submit" defaultValue="Gönder" />
                </form>
            </div>
        )
    }
}

export default AddMovie;