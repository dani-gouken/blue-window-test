import axios from "axios";

export const brands = {
    /**
     * @param {string|null} country
     * @returns {Promise<{brand_id: number, brand_name: string, brand_image: string, rating: number}>}
     */
    top(country = null) {
        let headers = country == null ? {} : { "CF-IPCountry": country };

        return axios
            .get("/api/brand", {
                headers,
            })
            .then((res) => {
                return res.data;
            });
    },
};
