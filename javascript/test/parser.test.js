const { parse } = require("../src/parser");

describe("Fraction Kata", function () {
  [""].forEach((input) => {
    it(`should fail if '${input}'`, function () {
      var result = parse(input);
      expect(result).toEqual({
        valid: false,
      });
    });
  });

  it("should resolve fraction {1/2}", function () {
    var result = parse("{1/2}");
    expect(result).toEqual({
      valid: true,
      result: 0.5,
    });
  });

  it("should resolve fraction {1/4}", function () {
    var result = parse("{1/4}");
    expect(result).toEqual({
      valid: true,
      result: 0.25,
    });
  });

  it("should resolve fraction {-1/4}", function () {
    const result = parse("{-1/4}");
    expect(result).toEqual({
      valid: true,
      result: -0.25,
    });
  });

  it("should resolve fraction {1/-4}", function () {
    const result = parse("{1/-4}");
    expect(result).toEqual({
      valid: true,
      result: -0.25,
    });
  });
});
