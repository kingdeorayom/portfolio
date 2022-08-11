import { Link } from "react-router-dom";
import { FaChevronCircleLeft } from 'react-icons/fa'

function BackButton() {

    return (
        <Link to="/"><FaChevronCircleLeft className="FaChevronCircleLeft" /></Link>
    )
}

export default BackButton