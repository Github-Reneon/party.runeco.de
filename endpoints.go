package main

import fiber "github.com/gofiber/fiber/v2"

func GetIndex(c *fiber.Ctx) error {
	c.Type("html")
	return c.Render("index", fiber.Map{})
}
