import axios from "axios";

export const brands = {
    /**
     * @returns {Promise<{brand_id: number, brand_name: string, brand_image: string, rating: number}>}
     */
    top: () => {
        return axios.get("/api/brand").then((res) => {
            return res.data;
        });
    },
};
